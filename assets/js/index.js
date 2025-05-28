

let resume='';
const language = document.getElementById('language').value;
let translation = language === 'ru' ? {
    salary: "Оплата",
    schedule: "График",
    certifications: "Сертификации",

    marital_status: "Семейное положение",
    military: "Военный билет",
    yes: "Есть",
    no: "Нет",
    have_kids: "Есть дети",
    about_me: "Обо мне",
    professional: "Мои профессиональные качества",
    
    med: "Медкнижка",
    drive: "Права категории",
    education: "Образование",
    year: "Год",
    per: "Период",
    specialty: "Специальность",
    faculty: "Факультет",
    institute: "Учебное заведение",
    position: "Должность и обязанности",
    period: "Период",
    expierence: "Опыт работы",
    contact: "Контактная информация",
    qualifications: "Ключевые квалификации",
    extra_info : "Дополнительная информация"
}
                                    :{
    
    salary: "Salary",
    schedule: "Schedule",
    certifications: "Certifications",
    marital_status: "Marital status",
    military: "Military ticket",
    yes: "Have",
    no: "Dont have",
    have_kids: "I have kids",
    about_me: "About me",
    professional: "My professional traits",
    med:"Medical Certificate",
    drive: "Driver\'s license",

    education: "Education",
    year: "Year",
    per: "Period",
    specialty: "Specialty",
    faculty: "Faculty",
    institute: "Educational institution",
    position: "Position",
    period: "Working Period",
    expierence: "Expierence",
    contact: "Contact Info",
    qualifications: "Key Qualifications",
    extra_info : "Extra info"
};

console.log(translation.extra_info);


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



// ADDING AND REMOVING SECTIONS START
//templates
let pc_skill_elements = 1
let experience_elements = 1
let certification_elements = 1
let education_elements = 1
let languages_elements = 1
let social_elements = 1
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
            if (pc_skill_elements < 6) {
                var new_skill = document.createElement('section') 
                new_skill.innerHTML = pc_skill.innerHTML
                new_skill.id = 'skill' + (++pc_skill_elements)
                new_skill.classList.add("pc_skill")
                pc_skill_parent.appendChild(new_skill) ;
            }
        break;
        case '.job_exp':
            if (experience_elements < 6) {
                var new_job_exp = document.createElement('section') 
                new_job_exp.innerHTML = experience.innerHTML
                new_job_exp.id = 'exp' + (++experience_elements)
                new_job_exp.classList.add("job_exp")
                experience_parent.appendChild(new_job_exp) ;
            }
        break;
        case '.certification':
            if (certification_elements < 6) {
                var new_crt = document.createElement('section') 
                new_crt.innerHTML = certification.innerHTML
                new_crt.id = 'crt' + (++certification_elements)
                new_crt.classList.add("certification")
                certification_parent.appendChild(new_crt) ;
            }
        break;
        case '.education':
            if (education_elements < 6) {
                var new_edu = document.createElement('section') 
                new_edu.innerHTML = education.innerHTML
                new_edu.id = 'edu' + (++education_elements)
                new_edu.classList.add("education")
                education_parent.appendChild(new_edu) ;
            }
        break;
        case '.languages':
           if (languages_elements < 6) {
                var new_lang = document.createElement('section') 
                new_lang.innerHTML = languages.innerHTML
                new_lang.id = 'lang' + (++languages_elements)
                new_lang.classList.add("languages")
                languages_parent.appendChild(new_lang) ;
            }
        break;
        case '.social':
            if (social_elements < 6) {
                var new_social = document.createElement('section') 
                new_social.innerHTML = social.innerHTML
                new_social.id = 'social' + (++social_elements)
                new_social.classList.add("social")
                social_parent.appendChild(new_social) ;
            }
        break;
    }
    
}


function removeBlock  (el) {
    var par_class = el.parentElement.parentElement.classList[0];
    console.log(par_class);
    
    switch (par_class) {
        case 'pc_skill':
            console.log(pc_skill_elements);
            pc_skill_elements--;
        break;
        case 'job_exp':
           experience_elements--;
        break;
        case 'certification':
            certification_elements--;
        break;
        case 'education':
            education_elements--;
        break;
        case 'languages':
            languages_elements--;
        break;
        case 'social':
            social_elements--;
        break;
    }
    
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in your name, phone and email')
                    return false;
                }
    }


    if (resumeData.jobPreferences.position === ""  ||
    resumeData.jobPreferences.salary === "" ||
    resumeData.jobPreferences.occupationType  === "" 
     ) {
        if (language === 'ru') {
            alert('Пожалуйста, заполните данные о желаемой работе')
                    return false;
        } else if (language === 'en'){
            alert('Please, fill in your position preferences')
                    return false;
        }
    }
    

    for (const exp in resumeData.experience) {
        for (const key in resumeData.experience[exp]) {
            if ((resumeData.experience[exp][key])=== "" ) {
                console.log(resumeData.experience[exp][key]);
                if (language === 'ru') {
                    alert('Пожалуйста, заполните все данные в поле опыта работы, или удалите его');
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in job experience data, or delete it');
                    return false;
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in certification data, or delete it');
                    return false;
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in education data, or delete it');
                    return false;
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in language data, or delete it');
                    return false;
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in pc skills data, or delete it');
                    return false;
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
                    return false;
                } else if (language === 'en'){
                    alert('Please, fill in social media data, or delete it');
                    return false;
                }
            }
        }
    }
    return true;
}




function makeResume() {
    const resumeData = getResumeData();
    if(verify(resumeData) === false){
        return;
    }

     resume += `
    <!DOCTYPE html>
        <html lang="${language}">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
             <style></style>
            <meta charset="UTF-8">
        </head>
        <body>
        <table class="no-border">
            <tr>
             <td width="60%" class="no-border">
             <img id="img" src="http://showyourself/assets/image/users/defolt.png" alt="">
                <h1>${resumeData.personal.firstName+ " "+resumeData.personal.middleName+ " "+resumeData.personal.lastName }</h1>`
                
                          resume +=  `<p><strong>${resumeData.jobPreferences.position}</strong></p>
                           <p>${translation.salary}: ${resumeData.jobPreferences.salary}</p>
                            <p>${translation.schedule}: ${resumeData.jobPreferences.schedule}, ${resumeData.jobPreferences.occupationType}</p>`
                            
                    resume += resumeData.personalDetails.date !=="" ? `<p>${resumeData.personalDetails.date}</p>` : "";
                    resume += resumeData.personalDetails.city !=="" ? `<p>${resumeData.personalDetails.city + " "+(resumeData.personalDetails.citizenship !=="" ? resumeData.personalDetails.citizenship: "")} </p>` : "";
                    resume += `</td>
                            <td width="40%" class="no-border">
                            <p><strong>${translation.contact}:</strong></p>
                            <p>${resumeData.personal.phone}</p>
                            <p>${resumeData.personal.email}</p>
                `
                
                if (typeof(resumeData.socials[0]) !== "undefined") {
                    for (const link in resumeData.socials) {
                            resume += `<p>${resumeData.socials[link].which_social + ": " + resumeData.socials[link].link_to_social}</p>`
                            
                        }
                }   
                resume += `</td>
                        </tr>
                    </table>
                `

                if ((typeof(resumeData.pcSkills[0]) !== "undefined") || typeof(resumeData.languages[0]) !== "undefined") {
                    
                    resume += `<div class="section-title">${translation.qualifications}</div>
                                <table>
                                    <tr>
                                        <td width="50%">
                                            <ul>`
                                    if (typeof(resumeData.languages[0]) !== "undefined"){
                                                for (const index in resumeData.languages) {
                                                    var lang =  resumeData.languages[index]
                                                    resume += `<li>${lang.language+" - "+lang.language_level}</li>`
                                                    }
                                                }
                                    if (typeof(resumeData.pcSkills[0]) !== "undefined"){
                                                for (const index in resumeData.pcSkills) {
                                                    var skill =  resumeData.pcSkills[index]
                                                resume += `  <li>${skill.skill+" - "+skill.skill_level}</li>`
                                                    }
                                                }
                                resume += ` </ul>
                                        </td>
                                    </tr>
                                </table>`
                                            
                }
            if (typeof(resumeData.experience[0]) !== "undefined"){
            resume += `<div class="section-title">${translation.expierence}</div>`
                
                for (const index in resumeData.experience) {
                    var exp =  resumeData.experience[index]
                    resume += `<table>
                                <tr class="header">
                                    <th width="30%">${translation.period}</th>
                                    <th width="70%">${translation.position}</th>
                                </tr>
                                <tr>
                                    <td>${translation.per}: ${exp.startDate+" - "+exp.endDate}</td>
                                    <td>
                                    <strong>${exp.position}</strong>
                                    - ${exp.company}
                                    - ${exp.description}
                                    </td>
                                </tr>
                            </table>
                            `
                }
            }
            if (typeof(resumeData.education[0]) !== "undefined"){
                resume += `<div class="section-title">${translation.education}</div>`
                for (const index in resumeData.education) {
                    var edu =  resumeData.education[index]
                    resume += `<table>
                                    <tr class="header">
                                        <th width="30%">${translation.year}</th>
                                        <th width="70%">${translation.institute}</th>
                                    </tr>
                                    <tr>
                                        <td>${translation.per}: ${edu.form+" - "+edu.finished}</td>
                                        <td>
                                            <strong>${edu.where}</strong><br/>
                                            ${translation.specialty}: ${edu.specialty} 
                                                ${edu.studied}
                                            ${translation.education}: ${edu.faculty}
                                        </td>
                                    </tr>
                                </table>
                    `
                }
            }
            if (typeof(resumeData.certifications[0]) !== "undefined"){
                resume += `<div class="section-title">${translation.certifications}</div>`
                for (const index in resumeData.certifications) {
                    var crt =  resumeData.certifications[index]
                    resume += `<table>
                                    <tr class="header">
                                        <th width="30%">${translation.year}</th>
                                        <th width="70%">${translation.institute}</th>
                                    </tr>
                                    <tr>
                                        <td>${translation.per}: ${crt.ended+" - "+crt.for_how_long}</td>
                                        <td>
                                            <strong>${crt.for_what}</strong><br/>
                                            ${translation.specialty}: ${crt.studied} 
                                        </td>
                                    </tr>
                                </table>
                    `
                }
            }

            resume += `<div class="section-title">${translation.extra_info}</div>
                        <table>
                            <tr>
                                <td width="50%">`
                                resume += resumeData.personalDetails.is_married ? (`<strong>${translation.marital_status}: </strong>` + resumeData.personalDetails.is_married + "<br/>") : "";
                                resume += `<strong>${translation.military}: </strong>`
                                resume +=  resumeData.personalDetails.military ? translation.yes+"<br/>" : translation.no+"<br/>";
                                resume += (resumeData.personalDetails.gender !== "Скрыть" || resumeData.personalDetails.gender !== "Hide") ? `${resumeData.personalDetails.gender + "<br/>"}` : "";
                                resume += resumeData.personalDetails.has_kids ? translation.have_kids+`<br/>` : "";
                               resume += '</td>'
                  resume +=`  <td width="50%">
                                    <strong>${translation.med}:</strong> ${resumeData.personalDetails.med ? translation.yes : translation.no} <br/>`
                                    resume += resumeData.extra.driver_A ? `<strong>${translation.drive} А</strong><br/>` : "";
                                    resume += resumeData.extra.driver_B ? `<strong>${translation.drive} B</strong><br/>` : "";
                                    resume += resumeData.extra.driver_C ? `<strong>${translation.drive} C</strong><br/>` : "";
                                    resume += resumeData.extra.driver_D ? `<strong>${translation.drive} D</strong><br/>` : "";
                                    resume += resumeData.extra.driver_E ? `<strong>${translation.drive} E</strong><br/>` : "";
            resume +=`        </td>
                        </tr>
                    </table>
                    `
            
            
                //extra info
                resume += resumeData.about_me.personal_char ? (`<div class="section-title">${translation.about_me}</div>
                    <table>
                            <tr>
                                <td width="100%">
                                    ${resumeData.about_me.personal_char}
                                </td>
                            </tr>
                        </table>
                    `) : "";
                resume += resumeData.about_me.professional_char ? (`<div class="section-title">${translation.professional}</div>
                    <table>
                            <tr>
                                <td width="100%">
                                    ${resumeData.about_me.professional_char}
                                </td>
                            </tr>
                        </table>
                    `) : "";
           resume +=  "</body></html>"
                // console.log(resume);

            check_user();
}

function send_resume() {
    
    const formData = new FormData()
                formData.append("html", resume);
                formData.append("style", "default");
                $.ajax({
                url: `${BASE_URL}/middleware/resume/resume_to_sql.php`,
                method: "post",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "json"
            })
}

function change_avatar() {
    var avatar = document.getElementById('avatar_input').files[0]
    let path = "users"
    let img = document.getElementById("img");
    download_file(avatar, path)
        .then(data => {
            img.src = data.url
            const d = new Date();
            document.cookie=`avatar=${data.url}; expires=${d.setTime(d.getTime() + (2*24*60*60*1000))}; path=/`
        })
        .catch(err => console.log(err))
}



function check_user() {
    if (usr_logged === true) {
        send_resume(resume);
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
   
   const formData = new FormData()
                formData.append("name", resumeData.personal.firstName)
                formData.append("email", resumeData.personal.email)
                formData.append("password", password)
                formData.append("phone", resumeData.personal.phone)
                formData.append("resume", resume)
                formData.append("style", 'default')
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
                dataType: "html"
            }).then(

                alert("На вашу почту было послано письмо с логином и паролем. Вы можете скачать резюме после входа в личный кабинет.")
            )
}


