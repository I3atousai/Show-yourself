function change_avatar() {
    let avatar = document.getElementById('avatar_input').files[0]
    let path = "users"
    let img = document.getElementById("img");
    download_file(avatar, path)
        .then(data => {
            img.src = data.url
        })
        .catch(err => console.log(err))
}