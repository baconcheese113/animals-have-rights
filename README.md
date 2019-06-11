# About

The development pillars of this project are minimalism and simplicity.

Due to that, all  styling is in [styles.scss](public/css/styles.scss).


## Tech Stack

This project uses:

**Frontend -** HTML5, [SCSS](https://sass-lang.com/documentation/syntax) compiled to CSS, [FontAwesome](https://fontawesome.com/icons?d=gallery) for icons, and [Google Fonts](https://fonts.google.com/) for fonts

**Backend -** [Nodejs](https://nodejs.org/en/), [Express](https://expressjs.com/) routing


## Usage

This should be a fairly simple project to modify. Most of the difficulty will just be getting a workspace set up. I'll walk through the entire process.

1. Install [Visual Studio Code](https://code.visualstudio.com/). *This will be where you type*
2. Install [Nodejs](https://nodejs.org/en/) *This will be how you view the site*
3. Open VS Code and in the terminal at the bottom run `git clone https://github.com/baconcheese113/animals-have-rights.git`
4. Then run `npm run dev` and visit [localhost:8080](http://localhost:8080) in the browser

**Congrats** You're now all set up

### Additional Setup (OPTIONAL)

If you need to change styles I recommend getting the [scss-to-css](https://marketplace.visualstudio.com/items?itemName=yutent.scss-to-css) VS Code extension


## Adding Gallery Images

1. Convert the image to .webp format [here](https://ezgif.com/jpg-to-webp)
2. Add the .webp in [JanetArt/](public/images/JanetArt/)
3. In [gallery.html](public/gallery.html) above the comment near the bottom add
```
<div class="img1x1">
  <img src="./images/JanetArt/yellow-blue.webp" alt="yellow blue" />
</div>
```
Make sure to replace the file name and alt text. If the picture has tall dimensions you can change the class to `img1x2` or `img1x3`

That's it! Once you save and refresh the browser it should be at the bottom of the gallery.


## Adding Blog Posts

TODO