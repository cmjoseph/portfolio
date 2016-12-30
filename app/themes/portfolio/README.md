# front-end-template with gulp /ɡʌlp/

## Requirements
You need an up-to-date node and npm. See [Update node and npm](## Update node and npm)

You need a gulp upper to version 3.9. To check which version you have installed, run:
```
gulp -v
```
If you are under 3.9, be sure to update with this simple command:
```
npm install gulp && npm install gulp -g
```

## Getting started
Make sure to pull this repo each time you start a new project.
Copy the /gulp folder along with `gulpfile.babel.js` and `.babelrc` and `package.json` under the root folder ( or the theme folder ) of your project. You might need `.gitignore` too if you don't have one already. 
Then run:
```
npm install
```
Create a empty config.js file under the /gulp folder and paste content from config.wordpress.js or config.akufen.js according to the project you are working on. You can make some adjustements to the configuration paths if you need to.
### /!\ Don't rename the keys in the config, cause it might break the gulp tasks. You shouldn't have to touch files under /tasks or /utils folder.

## Development
To start working, feel free to use one of these commands. The two first are just aliases for the last one
```
npm start
npm run dev
gulp build --watch
```
This should create 3 files according to what was specified in config: `[styles.output.filename].css`, `[scripts.custom.output.filename].js` and `[scripts.vendors.output.filename].js`.

## Production
To build your styles and scripts for production, you can use one of these commands. It's just an alias too.
```
npm run prod
gulp build --production
```
This should create 3 files according to what specified in config: `[styles.output.filename].min.css`, `[scripts.custom.output.filename].min.js` and `[scripts.vendors.output.filename].min.js`.
### /!\ The production files add a suffix .min on every file. Be careful when you includes them in your site.

## Update node and npm
You might have installed `node` and `npm` differents ways.

### Brew
Run
```
brew update
brew upgrade node
npm install -g npm
```

### Classic way
You might consider using `n` to switch and update node very easily.
```
sudo npm install -g n
sudo n stable
```

Then run to check if you are the latest version.
```
node -v
```
 At the time of this writing, you should be at `6.2.1`

### Troubleshootings and questions
If you have any problems or you have some questions, make sure you can't find the answer in the [FAQ](faq/README.md).
