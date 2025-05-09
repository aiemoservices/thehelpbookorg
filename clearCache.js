const link = document.querySelector('link[rel="stylesheet"][href="style.css"]');


if (link) {
    const timestamp = new Date().getTime();
    link.href = `https://thehelpbook.org/style.css?cacheBuster=${timestamp}`;
}