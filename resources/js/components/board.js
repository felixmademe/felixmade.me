if (window.location.href.indexOf('board') > -1) {
    let messages = $('.message');
    let colours = ['#05C46B', '#F53B57', '#1E272E', '#FFF'];
    let message, colour;

    for(let i = 0; i < messages.length; i++) {
         message = messages[i];

         // Gets random colour on message containers
         colour = colours[Math.floor(Math.random() * colours.length)];

        message.style.backgroundColor = colour;
        message.style.color = '#FFF';
        message.style.boxShadow = '10px 10px #1E272E';

         switch (colour) {
             case '#FFF':
                message.style.color = '#1E272E';
                message.style.border = 'solid 2px #1E272E';
                break;

             case '#1E272E':
                 message.style.boxShadow = '10px 10px #F53B57';
         }
    }
}
