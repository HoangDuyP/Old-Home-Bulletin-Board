<div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded" style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
    <table class="table table-hover w-100 mb-0">
        <thead>
            <tr>
                <th class="fw-bold w-25 font-s">Artificial Intelligence</th>
                <th class="fw-bold w-25">Author</th>
                <th class="fw-bold">Abstract</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-wrap text-break">Advancements in Artificial Intelligence</td>
                <td class="text-wrap text-break">
                    <?php
                    $authors = ["John Smith", "Jane Doe"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td class="text-wrap text-break">An in-depth study on recent advancements in AI.</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded" style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
    <table class="table table-hover w-100 mb-0">
        <thead>
            <tr>
                <th class="fw-bold w-25">Machine Learning</th>
                <th class="fw-bold w-25">Author</th>
                <th class="fw-bold">Abstract</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-wrap text-break">Data Science Applications in Healthcare</td>
                <td class="text-wrap text-break">
                    <?php
                    $authors = ["Michael Brown", "Emily Davis", "David Harris"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td class="text-wrap text-break">Exploring the impact of data science in healthcare...</td>
            </tr>
            <tr>
                <td class="text-wrap text-break">Machine Learning Algorithms for Big Data</td>
                <td class="text-wrap text-break">
                    <?php
                    $authors = ["Sarah Martin", "James Lee"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td class="text-wrap text-break">A comprehensive review of ML algorithms for big da...</td>
            </tr>
            <tr>
                <td class="text-wrap text-break">Big Data Challenges and Solutions</td>
                <td class="text-wrap text-break">
                    <?php
                    $authors = ["Jane Doe", "Sarah Martin"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td class="text-wrap text-break">Addressing the challenges faced in big data and pr...</td>
            </tr>
            <tr>
                <td class="text-wrap text-break">Bioinformatics: A New Era</td>
                <td class="text-wrap text-break">
                    <?php
                    $authors = ["Linda Thomas", "Michael Brown"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td class="text-wrap text-break">The role of bioinformatics in modern biology.</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded" style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
    <table class="table table-hover w-100 mb-0">
        <thead>
            <tr>
                <th class="fw-bold w-25">Natural Language Processing</th>
                <th class="fw-bold w-25">Author</th>
                <th class="fw-bold">Abstract</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Natural Language Processing Techniques</td>
                <td>
                    <?php
                    $authors = ["Amanda Wilson", "Robert Moore", "Linda Thomas"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td>A study on various NLP techniques and their applic...</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded" style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
    <table class="table table-hover w-100 mb-0">
        <thead>
            <tr>
                <th class="fw-bold w-25">Cyber Security</th>
                <th class="fw-bold w-25">Author</th>
                <th class="fw-bold">Abstract</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cyber Security Trends in 2024</td>
                <td>
                    <?php
                    $authors = ["John Smith", "David Harris"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td>An analysis of emerging trends in cyber security.</td>
            </tr>
            <tr>
                <td>IoT Security Issues</td>
                <td>
                    <?php
                    $authors = ["Emily Davis", "Robert Moore"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td>Investigating security issues in IoT and possible...</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded" style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
    <table class="table table-hover w-100 mb-0">
        <thead>
            <tr>
                <th class="fw-bold w-25">Cloud Computing</th>
                <th class="fw-bold w-25">Author</th>
                <th class="fw-bold">Abstract</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cloud Computing for Enterprises</td>
                <td>
                    <?php
                    $authors = ["Amanda Wilson", "John Smith", "Linda Thomas", "Michael Brown"];
                    $lastIndex = count($authors) - 1;
                    foreach ($authors as $index => $author) {
                        $urlAuthor = urlencode($author);
                        echo "<a class='text-decoration-none' href='index.php?action=author&name=$urlAuthor'>$author</a>";
                        if ($index !== $lastIndex) {
                            echo ", ";
                        }
                    }
                    ?>
                </td>
                <td>Benefits and challenges of cloud computing in ente...</td>
            </tr>
        </tbody>
    </table>
</div>