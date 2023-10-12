const days = document.querySelectorAll('.schedules__days .checkbox__field');
const articles = document.querySelectorAll('.schedules__events .schedules__day')
const types = document.querySelectorAll('.schedules__types .checkbox__field');
const articlesLines = document.querySelectorAll('.event')

days[0].checked = true;
types[0].checked = true;
articles.forEach(article => {
    article.getAttribute('data-day') === days[0].value ? article.style.display = 'block' : article.style.display = 'none';
})

types.forEach(type => {
    type.addEventListener('click', function () {
        const selectedType = this.value;
        articlesLines.forEach(articleLine => {
            if (selectedType === '*') {
                articleLine.style.display = 'block';
                return
            }
            articleLine.getAttribute('data-type') === selectedType ? articleLine.style.display = 'block' : articleLine.style.display = 'none';
        });
    })
});

days.forEach(day => {
    day.addEventListener('click', function () {
        const selectedDay = this.value;
        articles.forEach(article => {
            article.getAttribute('data-day') === selectedDay ? article.style.display = 'block' : article.style.display = 'none';
        })
    })
})