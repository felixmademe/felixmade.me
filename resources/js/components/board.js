if (window.location.href.indexOf('board') > -1) {
    let messages = $('.message');
    let colours = ['#05C46B', '#F53B57', '#1E272E', '#FFF'];

    for(let i = 0; i < messages.length; i++) {
        let message, colour, colourText, boxShadowColour, colourBorder, mes;
        message = messages[i];

        // Gets random colour on message containers
        colour = colours[Math.floor(Math.random() * colours.length)];
        colourText = '#FFF'
        boxShadowColour = '#1E272E';

        switch (colour) {
            case '#FFF':
                colourText = '#1E272E';
                colourBorder = colourText;

                message.style.border = 'solid 2px ' + colourBorder;
                break;

            case '#1E272E':
                boxShadowColour = '#F53B57';
                break;

        }

        message.style.backgroundColor = colour;
        message.style.color = colourText;
        message.style.boxShadow = '10px 10px ' + boxShadowColour;

        message.addEventListener('mouseover', function(event) {
            if(event.currentTarget === event.target)
            {
                mes = event.target
                mes.style.boxShadow = '-10px -10px ' + boxShadowColour;
            }

        }, false);

        message.addEventListener('mouseleave', function(event) {
            if(event.currentTarget === event.target)
            {
                mes = event.target
                mes.style.boxShadow = '10px 10px ' + boxShadowColour;
            }

        }, false);
    }
}
