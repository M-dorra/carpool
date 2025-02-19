function searchFAQ() {
    var username = document.getElementById('name').value;
    var userInput = document.getElementById('question').value.toLowerCase();

    // Search through FAQ data
    var faqData =[
    {
        question: "What is your service about?",
        answer: "Our service is designed to help anyone find transportation"
    },
    {
        question: "How can I contact customer support?",
        answer: "You can contact our customer support team by filling this form and we'll answer any questions you have"
    },
    {
        question: "can i access all the information of a driver?",
        answer: "Yes, once you request a ride and the driver accepts then you can access all the information needed but you'll still be able to see some info about the driver even before the request so you can make a choice"
    },
    // Add more FAQ entries as needed
];;
    var searchResults = [];

    for (var i = 0; i < faqData.length; i++) {
        var question = faqData[i].question.toLowerCase();
        var answer = faqData[i].answer.toLowerCase();

        // Check if the user's input matches the question
        if (question.includes(userInput)) {
            searchResults.push(faqData[i]);
        }
    }

    // Display search results (you can customize this part based on your design)
    displaySearchResults(searchResults);
}

function displaySearchResults(results) {
    // Display results on the page (e.g., in a list)
    var resultsContainer = document.getElementById('searchResults');
  
    // Clear previous results
    resultsContainer.innerHTML = '';

    if (results.length === 0) {
        resultsContainer.innerHTML = '<p>No results found.</p>';
    } else {
        for (var i = 0; i < results.length; i++) {
            var resultItem = document.createElement('li');
            resultItem.innerHTML = '<strong>' + results[i].question + '</strong><br>' + results[i].answer;
            resultsContainer.appendChild(resultItem);
        }
    }
}
function handleSubmit(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Your form handling logic goes here
}