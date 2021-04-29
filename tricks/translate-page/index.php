<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<p>Hello everybody!</p>

<p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p>You can translate the content of this page by selecting a language in the select box.</p>

<script type="text/javascript">

// JSON-formatted, potentially read from a database
var article = {
    title: {
      en_US: "Article Title",
      fr_FR: "Titre de l\'Article"
    },
    content: {
      en_US: "Content of the Article.",
      fr_FR: "Contenu de l\'Article."
    }
}

// simple function to write the info to the page
function get_i18n(item, lang) {
    document.write(article[item][lang]);
}
</script>

<!-- English Version -->
<div class="story">
   <h1 class="title"><script>get_i18n('title','en_US');</script></h1>
   <p class="content"><script>get_i18n('content','en_US');</script></p>
</div>

<!-- French Version -->
<div class="story">
   <h1 class="title"><script>get_i18n('title','fr_FR');</script></h1>
   <p class="content"><script>get_i18n('content','fr_FR');</script></p>
</div>

</body>
</html>
