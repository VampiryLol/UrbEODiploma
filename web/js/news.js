function news() {

    let array = []

    for (let subscribe of $('#news-form').find($('.subscribe'))) {
        if (subscribe.value) {
            array.push(subscribe.value)
        }
    }

    if(array.length == 2){
        $.ajax({
            url:'/site/news',
            // url:'/web/site/news',
            method:'POST',
            data:{
                name:array[0],
                email:array[1],
            },
        })
    }else{
        alert('У Вас не заполнено одно из полей для подписки на новости!')
    }
}