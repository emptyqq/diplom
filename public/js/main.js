document.querySelector(".btn-like").addEventListener("click", function () {
    this.classList.contains("active") ? this.classList.remove("active") : this.classList.add("active")
    this.parentElement.submit();
})
