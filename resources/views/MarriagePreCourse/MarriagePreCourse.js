document.addEventListener('DOMContentLoaded', function() {
    // Mock data for initial courses
    const courses = [
        { id: 1, name: 'Course 1', description: 'Description for Course 1', duration: 7 },
        { id: 2, name: 'Course 2', description: 'Description for Course 2', duration: 14 },
        // Add more courses as needed
    ];

    // Display initial courses
    displayCourses(courses);
});

function displayCourses(courses) {
    const courseList = document.getElementById('courseList');

    // Clear existing list
    courseList.innerHTML = '';

    // Add courses to the list
    courses.forEach(course => {
        const li = document.createElement('li');
        li.innerHTML = `${course.name} - <button onclick="viewCourse(${course.id})">View Details</button>`;
        courseList.appendChild(li);
    });
}

function openCreateForm() {
    const createForm = document.getElementById('createForm');
    createForm.classList.remove('hidden');
}

function closeCreateForm() {
    const createForm = document.getElementById('createForm');
    createForm.classList.add('hidden');
}

function createCourse() {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const duration = document.getElementById('duration').value;

    // Perform validation as needed

    // Mock: Add the new course to the list
    const newCourse = {
        id: Date.now(), // This is a simple way to generate a unique ID; you may want to use a more robust method
        name,
        description,
        duration: parseInt(duration),
    };

    // Mock: Add the new course to the list and redisplay courses
    const courses = [...currentCourses, newCourse];
    displayCourses(courses);

    // Mock: Clear the form and close it
    document.getElementById('courseForm').reset();
    closeCreateForm();
}

function viewCourse(courseId) {
    // Redirect or show detailed view for the selected course
    console.log(`View details for Course ID: ${courseId}`);
}
