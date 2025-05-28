avatar_input.onchange = change_avatar;

function change_avatar() {
  let file = avatar_input.files[0];
  let path = "users";
  let img = avatar_input.nextElementSibling;
  download_file(file, path)
    .then((data) => {
      img.src = data.url;
      const d = new Date();
      document.cookie = `avatar=${data.url}; expires=${d.setTime(
        d.getTime() + 2 * 24 * 60 * 60 * 1000
      )}; path=/`;
    })
    .catch((err) => console.log(err));
}

function delete_res(id) {
  document.getElementById(id).style.display = "none";
  const formData = new FormData();
  formData.append("id", id);
  $.ajax({
    url: `${BASE_URL}/middleware/resume/delete_resume.php`,
    method: "post",
    processData: false,
    contentType: false,
    data: formData,
    dataType: "json",
  });
}

document.querySelectorAll(".style_select").forEach((el) => {
  el.addEventListener("change", () => {
    const formData = new FormData();
    formData.append("id", el.id.replace("style", ""));
    formData.append("style", el.value);
    $.ajax({
      url: `${BASE_URL}/middleware/resume/update_style.php`,
      method: "post",
      processData: false,
      contentType: false,
      data: formData,
      dataType: "json",
    });
  });
});
