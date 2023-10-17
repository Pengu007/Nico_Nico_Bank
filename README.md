## Disclaimer
<b><i>This project should not be modified in any way and used anywhere else without my permission.</b></i>

If you use this project for illegal purposes after modifying the source code / or by any other means, remember that the original project and project owner has nothing to do with any of the  malicious purposes. Any loss of data or unauthorized access which happened because of such activities would not be my responsibility. Strict legal action would be taken if someone is found modifying it and using it for any unethical purpose.

# Nico Nico Bank
Nico Nico Bank is a fictional Bank just made to show the working of an online-banking system integrated in an web-based system by a beautiful website. This project is made by taking the reference of different diferent projects and modules available online online and various of my sources also guided me of how to build this.

## Built with
<b>HTML5, CSS, JavaScript</b> & <b>jQuery</b> used for front-end design.


<b>PHP7 & MySQL</b> used for back-end design.


<b>Oracle MySQL</b> has been used to create and host the database for the
internet banking website.


Other than the languages/tools mentioned above <b>no</b> other/external
libraries and/or web-page templates have been used, everything has been
coded from ground-up straight from scratch.

## How to build/use

* Watch this whole video for proper Setup : ()

* Setup an environment which supports web development like <b>LAMP</b> on <b>Linux</b> systems OR install <b>WampServer/XAMPP</b> or anything similar on <b>Windows</b>.
MySQL should already be installed in your Device. If not, plzz Install it as it is the first step of all.

* A. Copy the folder [nico_nico_ni]() or the files in it to the location of the localhost. For example "C:/Xampp/htdocs/", the loaction of localhost in Windows if you are using XAMPP.

OR

B. You can Directlyy copy the htdocs file already givenin your "C:/Xampp/"and make that previous htdocs as htdocs_original so that if u want to remove our project, you can get your original htdocs back. Refer to this video for more clarification().

* Import the [nico_bank.sql]() database into your MySQL setup. You can do it through phpMyAdmin also where you create new databse and name it, then on the above options select import and then in choose file option, choose our nico_bank.sql which u will be downloading from Github.Refer to this video for more clarification().

* Edit the file [connect.php]() and give proper username and password of your MySQL setup.The default is Y1 and thedarklord007, change it with your's Username and pass that you use to login to your MySQL BUTT before that make sure that you login to MySQL through mysql -u root -p without any pass and make a user granting that user all privilages. Refer to this video for better clarification(). 

* Open a browser and test wether the setup works or not by visiting the home page. Type "localhost/home.php" as the URL in the browser to visit the home page.

* All the passwords and the usernames of both the admin and the customer can be found in the database i.e. in the file [nico_bank.sql]().You can easily see these by opening nico_bank.sql through phpMyAdmin in "Customer" Tables.


Some useful links to help in proper setup :
* [Installing XAMPP]()
* [Making Connection]()
* [Importing database in MySQL]()

## Details about the project
All screenshots can be found [here]().

The ER Diagram can also be found [here]().

## Description of the various folders
- <b>/nico-nico-ni :</b> Contains the source code of the website
    - <b>/nico-nico-ni/images :</b> Contains various images and icon vectors used as resources in the website
    - <b>/nico-nico-ni/fonts :</b> Contains various fonts(.ttf files) used in the website

## Authors
* [ved](https://github.com/Pengu007/)
