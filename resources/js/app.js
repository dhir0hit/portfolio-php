import './bootstrap';

let projectList = {
    "Password Safe" : {
        "link": "https://github.com/dhir0hit/passwordSafe",
        "info": "This is first ever Project created By me, Shell app used to save your passwords."
    },
    "Personal Server" : {
        "link": "https://github.com/dhir0hit/Server",
        "info": "A Server Created to organize and help in day to day work. Includes password manager and code server How to Use this Server? Read ./Readme.md Detailed information about Server is there."
    },
    "My App" : {
        "link": "https://github.com/dhir0hit/my-app",
        "info": "App for YOU connect with Personal Server or use it offline without Server. contain different themes. How to Use this App? Read ./Readme.md Detailed information about this Application."
    },
    "Job Listing" : {
        "link": "https://github.com/dhir0hit/JobListing",
        "info": "Website for listing Jobs opening create profile post jobs or look for jobs."
    }
}

let projectCarousel = document.querySelectorAll("input[name='project']");
let projectName = document.getElementById('projectName');
let projectLink = document.getElementById('projectLink');
let projectInfo = document.getElementById('projectInfo');

function updatePage() {
    for (const projectCarouselElement of projectCarousel) {
        if (projectCarouselElement.checked) {
            projectName.innerText = projectCarouselElement.className;
            projectLink.innerText = projectList[projectCarouselElement.className].link;
            projectLink.href      = projectList[projectCarouselElement.className].link;
            projectInfo.innerText = projectList[projectCarouselElement.className].info;
        }
        projectCarouselElement.onclick = updatePage;
    }
}

updatePage()
