if (window.location.href.indexOf('board') > -1) {
    let messages = $('.message');

    for(let i = 0; i < messages.length; i++) {
        let message = messages[i];

        setsColour(message);
        setHoverEffect(message);
    }
}

function setsColour(message) {
    let colours = ['#05C46B', '#F53B57', '#1E272E', '#FFF'];
    let colour, colourText, boxShadowColour, colourBorder, mes;

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
}

function setHoverEffect(message) {
    // Gets box shadow colour to apply it to hover effect
    let boxShadow = message.style.boxShadow;
    let boxShadowColour = boxShadow.substr(0, 15)

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


if (window.location.href.indexOf('board') > -1) {
    $("#boardForm").on("submit", function (e) {
        e.preventDefault();
        e.stopPropagation();

        $('#popup').hide().empty();

        let recaptcha = $("#recaptcha").val();
        let status = $("#public").val();
        let message = $("#message").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let ajax = $.ajax(
            {
                type: 'POST',
                url: "/board/post",
                data:
                    {
                        message: message,
                        public: status,
                        recaptcha: recaptcha,
                    },
                dataType: 'json',
                success: function (data) {
                    $("#boardForm")[0].reset();
                    createMessage(data['data']);
                },
                error: function (data) {
                    // Handle if error
                    let popup = $('#popup');
                    let error = data['responseJSON']['message'].toLowerCase();
                    error = error.replace(/[^\w\s]|_/g, '').replace(/\s+/g, ' ');
                    let errorText = $('<p>' + error + '</p>')
                    popup.append(errorText);
                    popup.fadeIn(400)
                    setTimeout(function() {
                        popup.fadeOut(400);
                    }, 5000);
                }
            });
    });
}

function createMessage(data) {
    let container = $('.messages');
    let message = $('<div class="message"></div>');
    let text = $('<p class="text"></p>')
    let time = $('<small class="time"></small>').text(data[1]);

    text.append(time);
    text.append('<br>');
    text.append(data[0]['message']);
    message.append(text);
    container.prepend(message).fadeIn(400);

    message = message[0];
    setsColour(message);
    setHoverEffect(message);
}
