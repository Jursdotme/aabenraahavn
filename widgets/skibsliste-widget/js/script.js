function print_elm(elm_id) {
    var print_contents = document.getElementById(elm_id).innerHTML;
    var original_contents = document.body.innerHTML;
    document.body.innerHTML = print_contents;
    window.print();
    document.body.innerHTML = original_contents;
}