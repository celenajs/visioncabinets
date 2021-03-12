# DIVI SASS SETUP

# Features!

  - Divi Builder
  - SASS Compiler
  - JS Minifier

### Installation

Divi Sass Setup requires [Node.js](https://nodejs.org/) to run.

Install the dependencies and devDependencies and start the server.

Globalised the installation of gulp
```sh
$ sudo npm install -g gulp
```

### For development environments

**Create wp-config.php based on the wp-config-sample.php and generate Authentication Keys and Salt using this (https://api.wordpress.org/secret-key/1.1/salt/).**
- make sure to replace **line 49 - 56** with the generated keys and salt.

Install the Developer dependencies packages from package.json.
```sh
$ npm install
```

Copy the Developer dependencies packages from package.json.
```sh
$ gulp copy_libs
```

To work and compile your Sass files and JS files on the fly start:
```sh
$ gulp start
```

To work and make use of the **Browser Sync Feature**:

- make sure to update the gulpfile.js **line 100** to the current project name/virtual name of your project.

```sh
$ gulp start-sync
```

### If all else fails...

- Trust the code below and rerun npm install

```sh
$ sudo chown -R $USER:$GROUP ~/.npm
$ sudo chown -R $USER:$GROUP ~/.config
```

###### By: Jude Cabigas - Web Developer