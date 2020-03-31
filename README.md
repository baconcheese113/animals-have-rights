# About

The development pillars of this project are minimalism and simplicity.

Due to that, all  styling is in [styles.scss](public/css/styles.scss).


## Tech Stack

This project uses:

**Frontend -** HTML5, [SCSS](https://sass-lang.com/documentation/syntax) compiled to CSS, [FontAwesome](https://fontawesome.com/icons?d=gallery) for icons, and [Google Fonts](https://fonts.google.com/) for fonts

**Backend -** [Nodejs](https://nodejs.org/en/), [Express](https://expressjs.com/) routing. *It's just using PHP in prod, but don't mind that.*


## Usage

This should be a fairly simple project to modify. Most of the difficulty will just be getting a workspace set up. I'll walk through the entire process.

1. Install [Visual Studio Code](https://code.visualstudio.com/). *This will be where you type*
2. Install [Nodejs](https://nodejs.org/en/) *This will be how you view the site*
3. Open VS Code and in the terminal at the bottom run `git clone https://github.com/baconcheese113/animals-have-rights.git`
4. Run `npm install` from the folder that was just created (AnimalsHaveRights most likely)
5. Then run `npm run dev` and visit [localhost:8080](http://localhost:8080) in the browser

**Congrats** You're now all set up

### Additional Setup (OPTIONAL)

If you need to change styles I recommend getting the [scss-to-css](https://marketplace.visualstudio.com/items?itemName=yutent.scss-to-css) VS Code extension


## Adding Gallery Images

1. Add the .jpg in [JanetArt/](public/images/JanetArt/)
2. In [gallery.html](public/gallery.html) above the comment near the bottom add
```
<div class="img1x1">
  <img src="./images/JanetArt/yellow-blue.jpg" alt="yellow blue" />
</div>
```
Make sure to replace the file name and alt text. If the picture has tall dimensions you can change the class to `img1x2` or `img1x3`

That's it! Once you save and refresh the browser it should be at the bottom of the gallery.


## Adding Blog Posts

[Here's](http://recordit.co/ptjAn8NsL3) a video where I demonstrate the process of making a new blog post in 4 minutes.

1. In [blog.html](public/blog.html) duplicate a new article above my comment towards the bottom of the page. Replace the `id`, title, preview snippet, and filename. (`name-of-post` and `Title Of Post` will be reused in several places, please see posts for examples)
```
  <article class="preview" id="name-of-post">
    <h2 class="preview__title">Title Of Post</h2>
    <p class="preview__snippet" style="-webkit-box-orient: vertical;">
      This will be the first 5 sentences of the post, just enough to get a preview.
    </p>
    <a class="preview__button" href="blog/name-of-post.html">Read More&rarr;</a>
  </article>
```
2. Add a Content link at the top of the page, above my other comment.
```
  <a href="#name-of-post" class="blog-directory__link">Title of Post</a>
```
3. Create a new html file in [posts/](public/posts/) and give it the filename you used in step 1.
4. Copy everything from one of the other html files in posts and paste it into the new file.
5. In the new file change everything inside `<article class="post">` to write the blog. If you hit the footer you've gone too far. Any pieces of a different blog can be copied in and modified for the most part. The styling is usually determined by the `class`.

Boom! New Post! 


## Deployment

...yea...um, there's no easy way to put this.
__It's a mess.__

But if you have it working locally then it'll be pretty simple to upload the changed files and not touch anything else.

1. Log into the hosting provider and go to the cPanel Admin. *You could use an FTP like Filezilla instead, but it's really not necessary*
2. Find the `public_html` directory in the File Manager, this is similar to your local root folder for the project.
3. Upload the files you changed to the directory that parallels your local project.

Changes should be reflected immediately.