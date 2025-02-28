<section id="latest-news-placeholder" class="latest-news-section section-padding">
    <div class="container">
        <div class="heading text-center">
            <h1>Latest News</h1>
        </div>
        <div id="news-content" class="row mt-5">
            <!-- News content will be dynamically loaded here -->
        </div>
    </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const newsSection = document.getElementById('latest-news-placeholder');
    let isNewsLoaded = false;

    const decodeHtmlEntities = (str) => {
        const textarea = document.createElement('textarea');
        textarea.innerHTML = str;
        return textarea.value;
    };

    const loadNews = () => {
        if (isNewsLoaded) return;

        fetch("{{ route('get-news-api') }}")
            .then(response => response.json())
            .then(data => {
                let content = '';
                Object.values(data).forEach(news => { // Use Object.values to handle object keys
                    const day = new Date(news.post_date).getDate();
                    const month = new Date(news.post_date).toLocaleString('en-US', { month: 'short' });
                    const sanitizedInfo = decodeHtmlEntities(news.info.replace(/(Read More|&hellip;|&raquo;)/g, ''));
                    const photo = news.photo ? `<img class="img-fluid" src="${news.photo}" alt="News Image" loading="lazy">` : '';

                    content += `
                        <div class="col-12 col-lg-4 text-center mb-lg-0 mb-3">
                            <div class="news-image">
                                ${photo}
                                <div class="news-date">
                                    <h3>${day}</h3>
                                    <h5>${month}</h5>
                                </div>
                            </div>
                            <div class="news-content text-center">
                                <h5>${news.title}</h5>
                                <p>${sanitizedInfo}</p>
                                <a target="_blank" class="read-more" href="${news.url}">Read More</a>
                            </div>
                        </div>
                    `;
                });
                document.getElementById('news-content').innerHTML = content;
                isNewsLoaded = true;
            })
            .catch(error => console.error('Error fetching news:', error));
    };

    const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
            loadNews();
            observer.disconnect();
        }
    }, { threshold: 0.1 });

    observer.observe(newsSection);
});

</script>
