window.addEventListener('DOMContentLoaded', function() {
    //        \ここだよ！/
    //console.log('ここだよ');
    var button = document.getElementById('goBack');
    var goBackAction = () => {
        console.log('top戻るよ');
        window.scrollTo(0, 50);
    };

    button.addEventListener('click', goBackAction, false);
});

