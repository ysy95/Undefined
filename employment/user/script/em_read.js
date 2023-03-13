function cancel() {
    if (confirm("정말 취소하시겠습니까?")) {
        location.href = "../cancel.php";
    } else {
        return;
    }
}