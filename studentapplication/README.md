# Student Record Management System (CRUD) using PHP

This project is a simple CRUD (Create, Read, Update, Delete) operation implementation in PHP for managing student records. It provides basic functionalities to add, view, update, and delete student information.

## Features

- **Create**: Add new student records to the database.
- **Read**: View existing student records with their details.
- **Update**: Modify information of existing student records.
- **Delete**: Remove student records from the database.

## Installation using XAMPP

To run this project locally on your machine using XAMPP, follow these steps:

1. **Download and Install XAMPP**: Download XAMPP from the official website [here](https://www.apachefriends.org/index.html) and install it on your machine. Follow the installation instructions provided.

2. **Clone the Repository**: Clone this repository into the `htdocs` directory of your XAMPP installation. You can use Git to clone the repository, or simply download the ZIP file and extract it into the `htdocs` directory.

   ```bash
   git clone <repository_url>
   ```

3. **Start Apache and MySQL Servers**: Open XAMPP control panel and start both Apache and MySQL servers.

4. **Import Database**: Import the included SQL file (`stdcrud.sql`) into your MySQL database. You can use phpMyAdmin or any MySQL management tool to import the database. 

   - Launch your web browser and go to `http://localhost/phpmyadmin`.
   - Create a new database named `stdcrud`.
   - Select the newly created database `stdcrud`.
   - Click on the "Import" tab.
   - Choose the `database.sql` file from the project directory and click on "Go" to import.

5. **Configure Database Connection**: Open the `config.php` file located in the project directory. Update the database connection settings with your MySQL credentials if necessary.

6. **Access the Application**: Open your web browser and navigate to `http://localhost/<project_directory>` to access the application.

## Usage

1. Once you've accessed the application, you'll see options to perform CRUD operations on student records.
2. Click on the respective links to add, view, update, or delete student records.
3. Fill out the necessary details in the forms to add or update student records.
4. Click on "View Records" to see the existing student records.
5. You can also edit or delete records from the view page.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/your-feature-name`).
5. Create a new Pull Request.

## License

This project is licensed under the [MIT License](LICENSE).

## Support

For any questions or issues, please open an issue here on GitHub or contact [Ola Philips](mailto:philipsola64@gmail.com).
```

Feel free to adjust the instructions and details according to your project's specific setup and requirements!
