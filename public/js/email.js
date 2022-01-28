document.getElementById('student_number').addEventListener('focusout', function(e) {
    var student_number = document.getElementById('student_number').value;
    const email = document.getElementById('email');
    email.value = student_number + '@hr.nl';
});
