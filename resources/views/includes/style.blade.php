<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    section {
        flex: 1;
    }

    footer {
        background-color: #212529;
        flex-wrap: wrap;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .blog-content {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin-top: 100px;
    }


    .article-card {
        background: #f8f9fa;
        padding: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        flex: 0 0 calc(33.33% - 20px);
        box-sizing: border-box;
        height: 500px;
    }

    .article-header {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .article-content {
        font-size: 16px;
    }

    .article-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .w-5 {
        display: none;
    }

    .pagination {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    .pagination a,
    .pagination span {
        margin: 0 5px;
        padding: 5px 10px;
        border-radius: 3px;
        background-color: #f1f1f1;
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .active span {
        background-color: #007bff;
        color: white;
    }

    .pagination .disabled span {
        background-color: #f1f1f1;
        color: #888;
    }
</style>
