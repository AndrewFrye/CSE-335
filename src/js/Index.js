function openTab(evt, tabName) {
    clearResults();
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";

}

function openDefaultTab(tabName) {
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    document.getElementById("Open" + tabName).className += " active";
}

function inputValidation(datalist, value) {
    const dataListOptions = document.querySelectorAll(`#${datalist} option`);

    return Array.from(dataListOptions).some(option => option.value === value);
}

function clearResults() {
    document.querySelectorAll(`.resultsDiv`).forEach(div => {
        div.innerHTML = "";
    });
}

function sortDataList() {
    const dataLists = document.querySelectorAll('datalist');
    dataLists.forEach(dataList => {
        const options = Array.from(dataList.options);
        options.sort((a, b) => a.value.localeCompare(b.value));

        dataList.innerHTML = "";

        options.forEach(option => {
            dataList.appendChild(option);
        });
    });
}