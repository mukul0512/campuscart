$(document).ready(function() {
    // Function to load messages from the server
    function loadMessages() {
        $.ajax({
            url: 'load_messages.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    var messages = response.messages;
                    var messagesDiv = $('#messages');
                    messagesDiv.empty();
                    var currentUser = null;
                    messages.forEach(function(message) {
                        var userTag = (message.sender === currentUser) ? '' : (currentUser === 1) ? 'User 2' : 'User 1';
                        currentUser = (currentUser === 1) ? 2 : 1;
                        messagesDiv.append('<p><span class="user-tag">' + userTag + ':</span> ' + message.text + '</p>');
                    });
                    messagesDiv.scrollTop(messagesDiv.prop('scrollHeight'));
                }
            },
            error: function() {
                console.log('Error loading messages');
            }
        });
    }

    // Function to send a message to the server
    function sendMessage() {
        var message = $('#message').val().trim();
        if (message !== '') {
            $.ajax({
                url: 'send_message.php',
                method: 'POST',
                dataType: 'json',
                data: { message: message },
                success: function(response) {
                    if (response.success) {
                        $('#message').val('');
                        loadMessages();
                    }
                },
                error: function() {
                    console.log('Error sending message');
                }
            });
        }
    }

    // Load messages when the page is loaded
    loadMessages();

    // Send message when the send button is clicked
    $('#send').click(function() {
        sendMessage();
    });

    // Send message when the Enter key is pressed
    $('#message').keypress(function(e) {
        if (e.which === 13) {
            sendMessage();
            e.preventDefault();
        }
    });
});
