
var typed = new Typed('.nameData', {
    strings: ["Full Stack Developer", "Salesforce Analyst", "Problem Solver", "Tech Enthusiast"],
    typeSpeed: 100,
    backSpeed: 80,
    loop: true,
    backDelay: 1500
});



//loader animation

$(document).ready(function () {
    $("#loadingMessage").show();
    setTimeout(function () {
        $("#loadingMessage").hide();
        $("#content").show();
    }, 3000);
});


        //donwlode pdf

        $(document).ready(function () {
            var fileUrl = './cvFolder/G_Arunkumar.pdf';

            $('#downloadCV').on('click', function () {
                var downloadLink = document.createElement('a');

                downloadLink.href = fileUrl;

                downloadLink.download = 'G_Arunkumar_Resume.pdf';

                document.body.appendChild(downloadLink);

                downloadLink.click();

                document.body.removeChild(downloadLink);
            });
        });

        function submitAction() {
            alert("Sorry !!! Due to some techical issue you can't contact through this form. Please Contact directly to the given emailId.");
        }



        // navigation menu -- displaying the content of the selected menu

        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section');
      
            navLinks.forEach(link => {
              link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('data-target');
      
                navLinks.forEach(lnk => lnk.classList.remove('active'));
                sections.forEach(sec => sec.classList.remove('active'));
      
                link.classList.add('active');
                document.getElementById(targetId).classList.add('active');
              });
            });
          });