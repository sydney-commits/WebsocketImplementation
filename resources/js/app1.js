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


//subscribe to channel
const channel = Echo.channel("public.playground.1");

//define callback that will be called when you subcribe to a channel 
channel
    .subscribed(() => {
        console.log("subscribed");
    })
    //listen to websocket events
    .listen(".playground", (event) => {
        console.log(event);

        const message = event.message;
        const li = document.createElement("li");
        li.textContent = message;

        listMessage.append(li);
    });

// channel.listen('.playground', (data) => {
//     console.log(data)
// });
