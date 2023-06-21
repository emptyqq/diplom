<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\PaymentService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use YooKassa\Model\Notification\NotificationCanceled;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use YooKassa\Model\NotificationEventType;

class PaymentController extends Controller
{
    public function index()
    {
    }


    public function create(Request $request, PaymentService $service)
    {

        $link = $service->createPayment($request->amount, "Оплата подписки", [
            'user' => Auth::user()->id,
            'months' => $request->months,
        ]);
        return redirect($link);
    }


    public function callback(Request $request, PaymentService $service)
    {
        $source = file_get_contents('php://input');
        $requsetBody = json_decode($source, true);
        if (isset($requsetBody['event']) && $requsetBody['event'] === NotificationEventType::PAYMENT_CANCELED) {
            $notification = new NotificationCanceled($requsetBody);
        } else if (isset($requsetBody['event']) && $requsetBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED) {
            $notification = new NotificationSucceeded($requsetBody);
        } else if (isset($requsetBody['event']) && $requsetBody['event'] === NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE) {
            $notification = new NotificationWaitingForCapture($requsetBody);
        }
        // $notification = (isset($requestBody['event']) && $requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
        //     ? new NotificationSucceeded($requestBody)
        //     : new NotificationWaitingForCapture($requestBody);

        $payment = $notification->getObject();

        if (isset($payment->status) && $payment->status === 'waiting_for_capture') {
            $service->getClient()->capturePayment([
                'amount' => $payment->amount,
            ], $payment->id, uniqid('', true));
        }


        if (isset($payment->status) && $payment->status === 'succeeded') {
            if ((bool)$payment->paid === true) {
            }
        }
    }


    function follow(Request $request, User $user)
    {
        $user->follow = 1;
        $dateUnFollow = Carbon::now()->addMonth($request->months);
        $user->follow_date = $dateUnFollow;
        $user->save();
        Carbon::setlocale(LC_TIME, 'ru_RU.UTF-8');;
        return view("follow", [
            'dateUnFollow' => $dateUnFollow->format("d.m.Y"),
        ]);
    }
}
