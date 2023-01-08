console.log("HI")
const courses = document.querySelectorAll('.mycourse');
console.log('test', courses)
courses.forEach((course) => {
    console.log('test', course)
    course.addEventListener('click', (event) => {
        console.log(event.target)
        const courseId = event.target.getAttribute('data');
        console.log("id", courseId);
        window.location.href= "./" + courseId;
    })
});

