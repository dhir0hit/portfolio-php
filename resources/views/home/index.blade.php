<x-layout>
    <div class="main container">
        <div class="designer">
            <div>
                <h1>Beauty</h1>
                <p>
                    Brings out joy to user when. <br/>
                    experiencing elegant design and a work of 'Art'
                </p>
            </div>
            <span class="background-text">#Frontend</span>
            <span>tih0rihd@</span>
        </div>
        <div class="code">
            <div>
                <h1>&lt;<span>beast</span>&gt;</h1>
                <p>
                    Brings out terror for developers when <br/>
                    experiencing this side and making friends with 'Error'
                </p>
            </div>
            <span class="background-text">#Backend</span>
            <span>@dhir0hit</span>
        </div>
    </div>
    <div class="divider">
        {{--TODO: Add icons--}}
        icons
    </div>
    <div class="about container">
        <h1>About Me</h1>
        <p>
            <strong>Hey there!</strong>
            <br/>
            <br/>
            I'm [Your Name], a full-stack developer passionate about crafting clean, efficient code. With a background in [briefly mention your background], I thrive on solving complex problems and creating seamless user experiences.
            <br/>
            <br/>
            My skills span [mention your key technologies], and I'm always eager to learn more. Let's collaborate and turn ideas into reality!
        </p>
    </div>
    <div class="project container">
        <h1>&lt;<span>Projects</span>&gt;</h1>
        <span id="projectName" class="background-text">Password Safe</span>
        <div class="projects">
            <div>
                <a id="projectLink" href="https://github.com/dhir0hit/Server">
                    https://github.com/dhir0hit/passwordSafe
                </a>
                <p id="projectInfo">
                    This is first ever Project created By me,
                    Shell app used to save your passwords.
                </p>
            </div>

            <div class="carousel">
                <label>
                    <input class="Password Safe" type="radio" name="project" checked="checked">
                    <span>Password Safe</span>
                </label>

                <label>
                    <input class="Personal Server" type="radio" name="project">
                    <span>Personal Server</span>
                </label>

                <label>
                    <input class="My App" type="radio" name="project">
                    <span>My App</span>
                </label>

                <label>
                    <input class="Job Listing" type="radio" name="project">
                    <span>Job Listing</span>
                </label>
            </div>
        </div>
    </div>
    <div class="contact container"></div>
</x-layout>
