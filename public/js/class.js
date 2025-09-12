// ==============================
// Demonstration of Classes & Objects
// ==============================

// Class definition
class Student {
  constructor(name, age, course) {
    this.name = name;
    this.age = age;
    this.course = course;
  }

  greet() {
    return `Hello, my name is ${this.name} and I am learning ${this.course}`;
  }

  study() {
    return `${this.name} is studying ${this.course}`;
  }

  static welcomeMessage() {
    return "Welcome to the Student Management System!";
  }
}

// ==============================
// DOM Interactions
// ==============================
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("#studentForm");
  const resultDiv = document.querySelector("#result");
  const welcomeBtn = document.querySelector("#showWelcome");

  // Static method test
  if (welcomeBtn) {
    welcomeBtn.addEventListener("click", () => {
      alert(Student.welcomeMessage());
    });
  }

  // Form submit to create student
  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();

      const name = document.querySelector("#studentName").value.trim();
      const age = parseInt(document.querySelector("#studentAge").value.trim());
      const course = document.querySelector("#studentCourse").value.trim();

      if (!name || !age || !course) {
        resultDiv.innerHTML = `<p style="color:red;">Please fill out all fields.</p>`;
        return;
      }

      // Create new Student object
      const student = new Student(name, age, course);

      // Display results
      resultDiv.innerHTML = `
        <div class="example-box">
          <h3>Student Created:</h3>
          <p><strong>Name:</strong> ${student.name}</p>
          <p><strong>Age:</strong> ${student.age}</p>
          <p><strong>Course:</strong> ${student.course}</p>
          <p><strong>Greeting:</strong> ${student.greet()}</p>
          <p><strong>Study Status:</strong> ${student.study()}</p>
        </div>
      `;

      // Reset the form
      form.reset();
    });
  }
});
