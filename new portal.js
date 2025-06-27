var containers = document.getElementsByClassName("container-toggle");
var contents = document.getElementsByClassName("content-t");
var toggleSymbols = document.getElementsByClassName("toggle-symbol");

function toggleContainer(container) {
    var clickedContent = container.querySelector(".content-t");
    var clickedToggleSymbol = container.querySelector(".toggle-symbol");

    for (var i = 0; i < containers.length; i++) {
        var currentContent = contents[i];
        var currentToggleSymbol = toggleSymbols[i];

        if (currentContent === clickedContent) {
            currentContent.classList.toggle("show");
            currentToggleSymbol.textContent = currentContent.classList.contains("show") ? "-" : "+";
        } else {
            currentContent.classList.remove("show");
            currentToggleSymbol.textContent = "+";
        }
    }

}

function expandContainer(button) {
    const content = button.parentNode.querySelector('.expanded-content');
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        button.innerHTML = 'View Less <span class="expand-icon">&#9650;</span>';
    } else {
        content.style.display = 'none';
        button.innerHTML = 'View More <span class="expand-icon">&#9660;</span>';
    }
}