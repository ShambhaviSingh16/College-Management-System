# College-Management-System📚
The College Management System is a web-based application designed to streamline and manage various activities in a college environment. It serves colleges and universities as a centralized platform for Admin, Faculty, Librarian, and Students to manage and interact with various aspects of the college, including profiles, courses, notices, library management, attendance, and more.

In today's digital age, such software is indispensable for educational institutions and enterprises, ensuring seamless operations and 
organization-wide efficiency. 


## ✨ Features ✨

### **Admin**
* **Profile Management:** Admin can manage and edit their own profile, and reset passwords.
* **Student Enrollment:** Control the registration and enrollment of students in various courses.
* **Faculty & Librarian Management:** Admin can add and manage faculty and librarian profiles.
* **Library Management:** View the list of books in the library and manage new book requests made by the librarian.
* **Course Management:** Create and edit courses available in the college.
* **Notice Board:** Admin can post and update notices visible to all users.
* **Leave Requests:** View and manage leave applications submitted by students.
* **Logout:** Securely log out of the system.

### **Faculty**
* **Profile Management:** Faculty members can manage and edit their profiles, and reset passwords.
* **Class Schedule:** View the schedule of their classes.
* **Student Management:** View student lists, mark attendance, and upload marks.
* **Notice Board:** View notices uploaded by Admin and upload notices for students.
* **Notes Management:** Upload notes for students and access student-uploaded notes.
* **Leave Requests:** View and manage student leave requests (approve or reject).
* **Library Access:** Faculty can see the available books in the library.
* **Logout:** Securely log out of the system.

### **Student**
* **Profile Management:** Students can view and edit their profiles, and reset their passwords.
* **Notice Board:** View notices posted by faculties and Admin.
* **Results:** See their results uploaded by the faculty.
* **Leave Requests:** Apply for leave requests.
* **Notes Management:** View notes uploaded by teachers and upload their own notes and assignments.
* **Course Details:** View details about available courses.
* **Library:** Request books from the library, view the list of books, and check the history of books issued.
* **Logout:** Securely log out of the system.

### **Librarian**
* **Profile Management:** Librarians can view, edit, and reset their profiles.
* **Notices:** View notices posted by Admin.
* **Book Management:** Add new books to the library and view the list of available books.
* **Student Library Accounts:** Create, view, and manage student library accounts.
* **Book Requests:** See student book requests, issue books to students, and track issued book history.
* **Book Search:** Use a separate search function to find book information in the library system.
* **Logout:** Securely log out of the system.


## 💻 Technology Stack 

### **Frontend:**
- **HTML:** Used for the structure and layout of the webpages.
- **CSS:** Used for styling the pages and making the UI responsive.
- **JavaScript:** Used for client-side functionality like form validation and interactive elements.
  
### **Backend:**
- **PHP:** The core backend language used for implementing business logic and handling data processing.
- **Hack:** Used for type-safety and improved performance over PHP, enabling better static analysis and faster code execution.
  
### **Database:**
- **MySQL:** The relational database used to store user data, courses, attendance, library records, etc.


## Installation Guide ⬇️

### ⚡**Prerequisites**
- **PHP:** Make sure PHP (version 7.4 or above) is installed.
- **MySQL:** Set up MySQL for database management.
- **XAMPP/WAMP:** For managing Apache and MySQL services locally (optional but recommended for local development).
- **Text Editor/IDE:** Use any editor such as Visual Studio Code, Sublime Text, or PhpStorm for coding.

### ⚙️ **Steps to Set Up:**
1. **Clone the Repository:**

```bash
git clone https://github.com/ShambhaviSingh16/College-Management-System.git
```
2. **Set Up MySQL Database:**

- Create a new database in MySQL, for example, college_mgmt.
- Import the provided college_mgmt.sql file to initialize the database tables.

3. **Configure the Application:**

- Modify the database connection settings in the config.php file to match your MySQL server credentials.
- Ensure that the required PHP extensions (e.g., MySQLi, PDO) are enabled.

4. **Run the Project:**

- Start the Apache and MySQL services using XAMPP or WAMP.
- Place the project files in the htdocs directory (if using XAMPP) or www directory (if using WAMP).
- Access the project via the browser at http://localhost/college-management-system.

5. **Login:**

- You can log in as Admin, Faculty, Student, or Librarian with the appropriate credentials.


##  🧑‍💻 **How to Use**

- **Admin:** Log in using Admin credentials to manage students, faculty, courses, and the library.
- **Faculty:** Log in using Faculty credentials to manage your classes, attendance, and student results.
- **Student:** Log in using Student credentials to view notices, results, request books from the library, and more.
- **Librarian:** Log in using Librarian credentials to manage the library, issue books, and maintain student library accounts.


## **Contact:**

- 📧 Email: Sshambhavi89@gmail.com
- 📱GitHub: @ShambhaviSingh16

##  Acknowledgments 🏆
- **PHP:** For backend development and handling server-side logic.
- **Hack:** For better performance and type-safety in the codebase.
- **MySQL:** For providing a reliable relational database management system.
- **Bootstrap:** For responsive web design (optional, if used).
- **FontAwesome:** For icons (optional, if used)


## 🚨 Watch Out for Future Updates
Stay tuned for future updates where new features and optimizations will be added. This project is actively maintained and can be enhanced based on community feedback and contributions.

## **Contributing**  🤝
We welcome contributions to this project! To contribute:

- Fork this repository.
- Create a new branch (git checkout -b feature-name).
- Commit your changes (git commit -am 'Add new feature').
- Push to your fork (git push origin feature-name).
- Submit a pull request.

Feel free to fork this repository, create a new branch, and make changes. Once done, open a Pull Request, and we will review and merge your changes.

## 📜 License
This project is open-source and licensed under the MIT License. Contributions are welcome! 🌟
