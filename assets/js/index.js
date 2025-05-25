


const language = document.getElementById('language').value;

const getResumeData = () => {
  return {
    personal: {
      avatar: document.getElementById('avatar_input').files[0],
      firstName: document.getElementById('firstname').value,
      middleName: document.getElementById('middlename').value,
      lastName: document.getElementById('secondname').value,
      phone : document.getElementById('phone').value,
      email : document.getElementById('email').value,
    },
    jobPreferences: {
      position: document.getElementById('position').value,
      salary: document.getElementById('salary').value,
      occupationType: document.getElementById('occupation_type').value,
      schedule: document.getElementById('shifts').value,
    },
    experience: Array.from(document.querySelectorAll('.job_exp')).map(exp => ({
      startDate: exp.querySelector('.exp_start').value,
      endDate: exp.querySelector('.exp_end').value,
      position: exp.querySelector('.position').value,
      company: exp.querySelector('.org').value,
      description: exp.querySelector('.job_desc').value,
    })),
    personalDetails: {
        city : document.getElementById('city').value,
        date : document.getElementById('date').value,
        is_married : document.getElementById('is_married').value,
        has_kids : document.getElementById('has_kids').checked,
        citizenship : document.getElementById('citizenship').value,
        gender : document.getElementById('gender').value,
        degree : document.getElementById('degree').value,     
    },
    certifications: Array.from(document.querySelectorAll('.certification')).map(exp => ({
         studied : exp.querySelector('.studied').value,
         for_what : exp.querySelector('.for_what').value,
         for_how_long : exp.querySelector('.for_how_long').value,
         ended : exp.querySelector('.ended').value,
    })),
    education: Array.from(document.querySelectorAll('.education')).map(exp => ({
        form : exp.querySelector('.form_of_edu').value,
        finished : exp.querySelector('.finished').value,
        where : exp.querySelector('.where').value,
        faculty : exp.querySelector('.faculty').value,
        specialty : exp.querySelector('.specialty').value,
    })),
    languages: Array.from(document.querySelectorAll('.languages')).map(exp => ({
        language : exp.querySelector('.language').value,
        language_level : exp.querySelector('.level').value,
    })),
    pcSkills: Array.from(document.querySelectorAll('.pc_skill')).map(exp => ({
        skill : exp.querySelector('.skill').value,
        skill_level : exp.querySelector('.level').value,
    })),
    extra: {
        military : document.getElementById('military').checked,
        med : document.getElementById('med').checked,
        driver_A : document.getElementById('A').checked,
        driver_B : document.getElementById('B').checked,
        driver_C : document.getElementById('C').checked,
        driver_D : document.getElementById('D').checked,
        driver_E : document.getElementById('E').checked,
    },
    about_me: {
        personal_char : document.getElementById('personal').value,
        professional_char : document.getElementById('professional').value,
    },
    socials: Array.from(document.querySelectorAll('.social')).map(exp => ({
        link_to_social : exp.querySelector('.link_to_social').value,
        which_social : exp.querySelector('.which_social').value,
    })),
  };
};


// const resumeData = getResumeData();
// console.log(resumeData.experience[0].position); 




// ADDING AND REMOVING SECTIONS START
//templates
const pc_skill = document.querySelector('.pc_skill');
const pc_skill_parent = pc_skill.parentElement;
const experience = document.querySelector('.job_exp');
const experience_parent = experience.parentElement;
const certification = document.querySelector('.certification');
const certification_parent = certification.parentElement;
const education = document.querySelector('.education');
const education_parent = education.parentElement;
const languages = document.querySelector('.languages');
const languages_parent = languages.parentElement;
const social = document.querySelector('.social');
const social_parent = social.parentElement;

function addBlock(el) {
    switch (el) {
        case '.pc_skill':
            pc_skill_parent.innerHTML += pc_skill.outerHTML;
        break;
        case '.job_exp':
            experience_parent.innerHTML += experience.outerHTML;
        break;
        case '.certification':
            certification_parent.innerHTML += certification.outerHTML;
        break;
        case '.education':
            education_parent.innerHTML += education.outerHTML;
        break;
        case '.languages':
            languages_parent.innerHTML += languages.outerHTML;
        break;
        case '.social':
            social_parent.innerHTML += social.outerHTML;
        break;
    }
    
}


function removeBlock  (el) {
    let parent = el.parentElement.parentElement.remove();
}
// ADDING AND REMOVING SECTIONS END



//USER DATA VERIFICATION START
function verify(resumeData) {

    if (resumeData.personal.firstName === ""  ||
    resumeData.personal.lastName === "" ||
    resumeData.personal.phone  === ""  ||
    resumeData.personal.email  === "" ) {
        if (language === 'ru') {
                    alert('Пожалуйста, заполните данные в поле имени, телефона и почты')
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in your name, phone and email')
                    return;
                }
    }


    if (resumeData.jobPreferences.position === ""  ||
    resumeData.jobPreferences.salary === "" ||
    resumeData.jobPreferences.occupationType  === "" 
     ) {
        if (language === 'ru') {
            alert('Пожалуйста, заполните данные о желаемой работе')
            return;
        } else if (language === 'en'){
            alert('Please, fill in your position preferences')
            return;
        }
    }
    

    for (const exp in resumeData.experience) {
        for (const key in resumeData.experience[exp]) {
            if ((resumeData.experience[exp][key])=== "" ) {
                console.log(resumeData.experience[exp][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле опыта работы, или удалите его');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in job experience data, or delete it');
                    return;
                }
            }
        }
    }
    for (const crt in resumeData.certifications) {
        for (const key in resumeData.certifications[crt]) {
            if ((resumeData.certifications[crt][key])=== "" ) {
                console.log(resumeData.certifications[crt][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле сертификации, или удалите его');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in certification data, or delete it');
                    return;
                }
            }
        }
    }
    for (const edu in resumeData.education) {
        for (const key in resumeData.education[edu]) {
            if ((resumeData.education[edu][key])=== "" ) {
                console.log(resumeData.education[edu][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле образования, или удалите его');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in education data, or delete it');
                    return;
                }
            }
        }
    }
    for (const lang in resumeData.languages) {
        for (const key in resumeData.languages[lang]) {
            if ((resumeData.languages[lang][key])=== "" ) {
                console.log(resumeData.languages[lang][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле знания языков, или удалите его');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in language data, or delete it');
                    return;
                }
            }
        }
    }
    for (const skill in resumeData.pcSkills) {
        for (const key in resumeData.pcSkills[skill]) {
            if ((resumeData.pcSkills[skill][key])=== "" ) {
                console.log(resumeData.pcSkills[skill][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле навыков владения компьютером, или удалите его');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in pc skills data, or delete it');
                    return;
                }
            }
        }
    }
    for (const link in resumeData.socials) {
        for (const key in resumeData.socials[link]) {
            if ((resumeData.socials[link][key])=== "" ) {
                console.log(resumeData.socials[link][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле ссылок на соцсети, или удалите их');
                    return;
                } else if (language === 'en'){
                    alert('Please, fill in social media data, or delete it');
                    return;
                }
            }
        }
    }
}



function makeResume() {
    const resumeData = getResumeData();
    // verify(resumeData);
    // for different templates switch the style block

    let style = {
        default: `@page { size: A4; margin: 0; }
                .upper{
                    display: flex;flex-direction: row; column-gap: 20px;
                }
                body {width: 210mm; height: 297mm;margin: 0;
                padding: 15mm; box-sizing: border-box;
                font-family: Arial, sans-serif; line-height: 1.6;}
                h1{color: #2c3e50 ; }
                .section {margin-bottom: 15px; border: 2px solid black;
                        border-radius: 8px;padding: 5px;}
                .header {text-align: left; border: 2px solid #3498db;
                width: 50%; padding: 5px;
                border-radius: 8px;margin-bottom: 10px;}
                .rest_of_data{display: grid; 
                    grid-template-columns: 1fr 1fr 1fr;column-gap: 20px;}
                .contact_info {margin: 10px 0;}`
    }

    let resume = `
    <!DOCTYPE html>
        <html lang="en">
        <head>
             <style>
                ${style.default}
            </style>
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="upper">
            <div class="header">
                <h1>${resumeData.personal.firstName+ " "+resumeData.personal.middleName+ " "+resumeData.personal.lastName }</h1>`
                resume += `<div class="contact_info">
                            <p>${resumeData.personal.phone}</p>
                            <p>${resumeData.personal.email}</p>
                `
                if (typeof(resumeData.socials[0]) !== "undefined") {
                    for (const link in resumeData.socials) {
                            resume += `<p>${resumeData.socials[link].which_social + ": " + resumeData.socials[link].link_to_social}</p>`
                        
                    }
                }   
                resume += '</div>'
            resume += '</div>'
            resume += `<div class="header">
                            <h2>${resumeData.jobPreferences.position}</h2>
                            <p>${resumeData.jobPreferences.salary}</p>
                            <p>${resumeData.jobPreferences.occupationType}</p>
                            <p>${resumeData.jobPreferences.schedule}</p> ` 
            resume += '</div>'
        resume += '</div>'
        resume += '<div class="rest_of_data">'
        
        if (typeof(resumeData.certifications[0]) !== "undefined"){
            resume += '<div class="section">'
            for (const index in resumeData.certifications) {
                var crt =  resumeData.certifications[index]
                    `<h2>${crt.for_what}</h2>
                    <p>${crt.studied}</p>
                    <p>${crt.ended+" - "+crt.for_how_long}</p>
                    `
                    
                }
                resume += "</div>"
            }
            if (typeof(resumeData.education[0]) !== "undefined"){
                for (const index in resumeData.education) {
                    var edu =  resumeData.education[index]
                    resume += `<div class="section">
                    <h2>${edu.specialty}</h2>
                    <p>${edu.where}</p>
                    <p>${edu.faculty}</p>
                    <p>${edu.studied}</p>
                    <p>${edu.form+" - "+edu.finished}</p>
                    </div>
                    `
                }
                resume += "</div>"
            }
            if (typeof(resumeData.experience[0]) !== "undefined"){
                for (const index in resumeData.experience) {
                    var exp =  resumeData.experience[index]
                    resume += `<div class="section">
                    <h2>${exp.specialty}</h2>
                    <h2>${exp.where}</h2>
                    <h2>${exp.faculty}</h2>
                    <p>${exp.studied}</p>
                    <p>${exp.form+" - "+exp.finished}</p>
                    </div>
                    `
                }
            }
            if (typeof(resumeData.languages[0]) !== "undefined"){
                resume += '<div class="section">'
                for (const index in resumeData.languages) {
                    var lang =  resumeData.languages[index]
                    resume += `<p>${lang.language+" - "+lang.language_level}</p>`
                }
            resume += '</div>'
            }
            if (typeof(resumeData.pcSkills[0]) !== "undefined"){
                resume += '<div class="section">'
                for (const index in resumeData.pcSkills) {
                    var skill =  resumeData.pcSkills[index]
                  resume += `  <p>${skill.skill+" - "+skill.skill_level}</p>`
                    }
            resume += '</div>'
                    }

                    //personal info
                resume += '<div class="section">'
                    resume += resumeData.personalDetails.date !=="" ? `<p>${resumeData.personalDetails.date}</p>` : "";
                    resume += resumeData.personalDetails.city !=="" ? `<p>${resumeData.personalDetails.city}</p>` : "";
                    resume += resumeData.personalDetails.citizenship !=="" ? `<p>${resumeData.personalDetails.citizenship}</p>` : "";
                    resume += resumeData.personalDetails.is_married ? `<p>${resumeData.personalDetails.is_married}</p>` : "";
                    resume += resumeData.personalDetails.has_kids ? `<p>Есть дети</p>` : "";
                    resume += (resumeData.personalDetails.gender !== "Скрыть" || resumeData.personalDetails.gender !== "Hide") ? `<p>${resumeData.personalDetails.gender}</p>` : "";
                    resume += `<p>${resumeData.personalDetails.degree}</p>` ;
                resume += '</div>'
                //extra info
                resume += '<div class="section">'
                    resume += resumeData.extra.military ? "<p>Был в армии</p>" : "";
                    resume += resumeData.extra.med ? "<p>Есть действующая медкнижка</p>" : "";
                    resume += resumeData.extra.driver_A ? "<p>Права категории А</p>" : "";
                    resume += resumeData.extra.driver_B ? "<p>Права категории B</p>" : "";
                    resume += resumeData.extra.driver_C ? "<p>Права категории C</p>" : "";
                    resume += resumeData.extra.driver_D ? "<p>Права категории D</p>" : "";
                    resume += resumeData.extra.driver_E ? "<p>Права категории E</p>" : "";
                resume += '</div>'
                resume += '<div class="section">'
                resume += resumeData.about_me.personal_char ? resumeData.about_me.personal_char : "";
                resume += '</div>'
                resume += '<div class="section">'
                resume += resumeData.about_me.professional_char ? resumeData.about_me.professional_char : "";
                resume += '</div>'
            resume += '</div>'
           resume +=  "</body></html>"
                // console.log(resume);


                 
            check_user();
            send_avatar(resumeData.personal.avatar);
            send_resume();
        // social_parent.innerHTML = resume;
}

function send_resume(resume) {
    const formData = new FormData()
                formData.append("resume", resume)
                $.ajax({
                url: `${BASE_URL}/middleware/resume/resume_to_sql.php`,
                method: "post",
                processData: false,
                contentType: false,
                data: formDataNoted,
                dataType: "json"
            })
}

function change_avatar() {
    var avatar = document.getElementById('avatar_input').files[0]
    let path = "users"
    let img = document.getElementById("img");
    download_file(avatar, path)
        .then(data => {
            console.log(data.url);
            
            img.src = data.url
        })
        .catch(err => console.log(err))
}



function check_user() {
    if (usr_logged === true) {
        alert("Можете скачать резюме в личном кабинете")
        return;
    } else {
        reg();
    }

}

function reg() {
    const resumeData = getResumeData();
   var password = Math.floor(Math.random()* (99999999 - 10000000) + 10000000)+"rd"
//    document.cookie = `username=${resumeData.personal.firstName}`;
//    document.cookie = `password=${password}`;
   console.log(BASE_URL);
   
   const formData = new FormData()
                formData.append("name", resumeData.personal.firstName)
                formData.append("email", resumeData.personal.email)
                formData.append("password", password)
                formData.append("phone", resumeData.personal.phone)

                //Here i send user data to sql and send hil login details on email
                $.ajax({
                url: `${BASE_URL}/middleware/public/send_login_info.php`,
                method: "post",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "json"
            })
                $.ajax({
                url: `${BASE_URL}/middleware/public/registration.php`,
                method: "post",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "json"
            }).then(

                alert("На вашу почту было послано письмо с логином и паролем. Вы можете скачать резюме после входа в личный кабинет.")
            )
}


