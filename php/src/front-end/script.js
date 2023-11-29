// This is a basic example, replace the function implementations with your API calls

// Function to fetch a joke and display it
function fetchJoke() {
  fetch("http://localhost:8000/get-joke.php")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      document.getElementById("jokeId").textContent = data.jokeId;
      document.getElementById("jokeText").textContent = data.jokeContent;
    })
    .catch((error) => console.error("Error fetching joke:", error));
}

// Function to handle vote a joke
function vote(vote) {
  var jokeId = document.getElementById("jokeId").textContent;
  if (jokeId == 0) return;

  var formData = new URLSearchParams();
  formData.append("jokeId", jokeId);
  formData.append("vote", vote);

  fetch("/vote.php", {
    method: "POST",
    body: formData,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      console.log(data);
      fetchJoke();
    })
    .catch((error) => {
      console.error("Error " + vote + " joke:", error);
    });
}
// Initial fetch of a joke when the page loads
fetchJoke();
