const main_video = document.querySelector('.video-principal video');
const main_video_title = document.querySelector('.video-principal .titulo');
const video_playlist = document.querySelector('.video-tuto .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Curso Básico de HTML desde 0 - Introducción',
        'name': 'Curso Básico de HTML desde 0 - Introducción.mp4',
        'duration': '15:23',
    },
    {
        'id': 'a2',
        'title': 'Curso Básico de CSS desde 0 - Introducción',
        'name': 'Curso Básico de CSS desde 0 - Introducción.mp4',
        'duration': '8:39',
    },
    {
        'id': 'a3',
        'title': 'Introducción a JavaScript',
        'name': 'Introducción a JavaScript.mp4',
        'duration': '11:51',
    },
];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">
                    <p>${i + 1 > 9 ? i + 1 : '0' + (i + 1)}. </p>
                    <h3 class="titulo">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
                `;
    video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');

videos.forEach(selected_video => {
    selected_video.onclick = () => {

        for (all_videos of videos) {  //Esto es un ciclo
            all_videos.classList.remove('active');
        }

        selected_video.classList.add('active');

        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = 'Videos/' + match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
});