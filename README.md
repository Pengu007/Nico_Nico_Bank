## Disclaimer
<b><i>Plzz donot modify this project in any way and  shouldn't be used anywhere else without my permission.</b></i>

If you use this project for illegal purposes after modifying the source code or by any other means, remember that the original project and project owner have nothing to do with any of the malicious purposes. Any loss of data or unauthorized access that happens because of such activities would not be my responsibility. Strict legal action would be taken if someone is found modifying it and using it for any unethical purpose.

# Nico Nico Bank
Nico Nico Bank is a fictional Bank created to demonstrate the working of an online-banking system integrated into a web-based system through a beautiful website. This project is made by referencing different projects, modules available online, and various sources that guided me in building this.

## Built with
<b>HTML5, CSS, JavaScript</b> & <b>jQuery</b> used for front-end design.


<b>PHP7 & MySQL</b> used for back-end design.


<b>Oracle MySQL</b> has been used to create and host the database for the
internet banking website.


Other than the languages/tools mentioned above <b>no</b> other/external
libraries and/or web-page templates have been used, everything has been
coded from ground-up straight from scratch.

## How to build/use

* Watch the whole video for proper Setup [here](https://youtu.be/ZTxt9ZqEbqs?si=FsGgs3Al3NwGb5XA)

* Setup an environment which supports web development like <b>LAMP</b> on <b>Linux</b> systems OR install <b>WampServer/XAMPP</b> or anything similar on <b>Windows</b>.
MySQL should already be installed in your Device. If not, plzz Install it as it is the first step of all. If need help, [here](https://youtu.be/GtO-1LfxqOI)

* A. Copy the folder [nico_nico_ni](https://github.com/Pengu007/Nico_Nico_Bank/tree/main/nico_nico_ni) or the files in it to the location of the localhost. For example "C:/Xampp/htdocs/", the loaction of localhost in Windows if you are using XAMPP.

OR

* B. (RECOMMENDED) You can Directlyy copy the [htdocs](https://github.com/Pengu007/Nico_Nico_Bank/tree/main/htdocs) file given already in your "C:/Xampp/"and make your previous htdocs(of you PC) as htdocs_original so that if u want to remove our project, you can get your original htdocs back. Refer to this [video](https://youtu.be/ZTxt9ZqEbqs?si=9wT34vHb3x_MLv8p&t=789) for more clarification.

* Edit the file [connect.php](https://github.com/Pengu007/Nico_Nico_Bank/blob/main/htdocs/connect.php) and give proper username and password of your MySQL setup.The default is "Y1" and "thedarklord007", change it with your's Username and pass that you use to login to your MySQL BUTT before that make sure that you login to MySQL through mysql -u root -p without any pass and make a user granting that user all privilages. Refer to this [video](https://youtu.be/ZTxt9ZqEbqs?si=toYA6taVwNpOky4s&t=1380) for better clarification.

* Import the [nico_bank.sql](https://github.com/Pengu007/Nico_Nico_Bank/blob/main/nico_bank.sql) database into your MySQL setup. You can do it through phpMyAdmin also where you create new database and name it, then on the above options select import and then in choose file option, choose our "nico_bank.sql" file which u will be downloading from Github. Refer to this [video](https://youtu.be/ZTxt9ZqEbqs?si=MpK2HIRmCPgNj1mP&t=1865) for more clarification.

* Open a browser and test wether the setup works or not by visiting the home page. Type "localhost/home.php" as the URL in the browser to visit the home page. And if facing some Error, then comment on any of our Video of our [Video Series](https://youtube.com/playlist?list=PLegFcF7rtS9CwWriCFdh7h7C_Uc-V20DL&si=gbUClwrVQQfGT-En) :) . We will try to help as much as possible.

* All the passwords and the usernames of both the admin and the customer can be found in the database i.e. in the file [nico_bank.sql](https://github.com/Pengu007/Nico_Nico_Bank/blob/main/nico_bank.sql).You can easily see these by opening nico_bank.sql through phpMyAdmin in "Customer" Tables.


Some useful links to help in proper setup :
* [Installing MySQL](https://youtu.be/GtO-1LfxqOI)
* [Installing XAMPP and GitBash](https://youtu.be/6kZXK1jk-IQ)
* [Making Connection and Importing database in MySQL](https://youtu.be/ZTxt9ZqEbqs)
* [Site Demo from and other stuffs](https://youtu.be/EIBjpJHYYr4)

## Details about the project
All project screenshots can be found [here](https://github.com/Pengu007/Nico_Nico_Bank/tree/main/Project_SC).

The ER Diagram can also be found [here](https://github.com/Pengu007/Nico_Nico_Bank/blob/main/Project_SC/nico-er-diagram.png).

## Description of the various folders
- <b>/nico-nico-ni :</b> Contains the source code of the website
    - <b>/nico-nico-ni/images :</b> Contains various images and icon vectors used as resources in the website
    - <b>/nico-nico-ni/fonts :</b> Contains various fonts(.ttf files) used in the website

## Authors
* [Ved_Y1](https://github.com/Pengu007/)
