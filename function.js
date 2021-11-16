function editButtonClick() {
    $('form').action = 'editaction.php';
    $('form').submit();
}

function deleteButtonClick() {
    $('form').action = 'deleteaction.php';
    $('form').submit();
}