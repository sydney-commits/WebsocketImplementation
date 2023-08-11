import "./bootstrap";


const form = document.getElementById("form");
const inputMessage = document.getElementById("input-message");
const listMessage = document.getElementById("list-messages");

form.addEventListener("submit", function (SubmitEvent) {
    event.preventDefault();
    const userInput = inputMessage.value;

    axios.post("/chat-message", {
        message: userInput,
    });
});


//subscribe to Private channel
const channel = Echo.private("private.chat.1");

//define callback that will be called when you subcribe to a channel 
channel
    .subscribed(() => {
        console.log("subscribed");
    })
    //listen to websocket events
    .listen(".chat-message", (event) => {
        console.log(event);

        const message = event.message;
        const li = document.createElement("li");
        li.textContent = message;

        listMessage.append(li);
    });

// channel.listen('.playground', (data) => {
//     console.log(data)
// });
