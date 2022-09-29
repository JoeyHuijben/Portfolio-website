<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{mix("css/style.css")}}">
    <title>Portfolio-website</title>
</head>
<header>
    <h1>Portfolio Joey Huijben</h1>
</header>
<body>
    <div class="introductionContainer">
        <div class="introduction">
            <h4>Informatie over deze website</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Accusantium aliquid aperiam aspernatur eius exercitationem harum minus molestiae nulla temporibus totam!</p>
            <p>Amet commodi hic officia quisquam! Eum officia quo reprehenderit voluptatem.</p>
        </div>
    </div>

    <div class="separator">
        <h2>About me</h2>
    </div>

    <div class="aboutMeContainer">
        <div class="aboutMe">
            <h4>Iets over mezelf</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Accusantium aliquid aperiam aspernatur eius exercitationem harum minus molestiae nulla temporibus totam!</p>
            <p>Amet commodi hic officia quisquam! Eum officia quo reprehenderit voluptatem.</p>
        </div>
        <div class="imageOfMe">
            <img src="{{ asset('assets/Mario.jpg') }}" alt="Foto van mezelf">
        </div>
    </div>

    <div class="separator">
        <h2>Projecten</h2>
    </div>

    <div class="projectsContainer">
        <div class="projects">
            <label>Filter</label>
            <select>
                <option value="Web">
                    Web
                </option>
                <option value="C#">
                    C#
                </option>
            </select>
            <h4>Projectnaam</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <h4>Afbeelding van het project</h4>
            <img src="{{ asset('assets/Mario.jpg') }}" alt="foto van project">
            <h4>Beschrijving</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi cumque dignissimos, dolore laudantium maiores nihil, non obcaecati quo repudiandae velit, veniam voluptates voluptatibus. Aliquid necessitatibus provident quae sunt tenetur?</p>
        </div>
    </div>

    <div class="navigators">
        <a href="{{ url('/projects') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg></a>
    </div>
</body>
<footer>
    <div class="links">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg>
    </div>
</footer>
</html>
