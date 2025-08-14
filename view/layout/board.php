<?php foreach ($boards as $forumBoard => $topicList): ?>
    <div class="mt-0 me-3 ms-3 mb-1 p-0 ps-1 pe-1 pb-2 rounded"
        style="background: linear-gradient(to bottom, #0e9ae0, #0179b5);">
        <table class="table table-hover w-100 mb-1">
            <thead>
                <tr style="font-size: 10px;">
                    <th class="firstCell"><?php echo $forumBoard; ?></th>
                    <th class="text-center secondCell">TOPICS</th>
                    <th class="text-center thirdCell">POSTS</th>
                    <th class="fourthCell">LAST POST</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($topicList as $topic): ?>        
                <tr>
                    <td class="text-wrap text-break">
                        <div class="d-flex align-items-start">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle border border-primary me-2 mt-2"
                                style="width: 35px; height: 35px; background-color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-list mb-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                </svg>
                            </div>
                            <div>
                                <div><a href="#" class="boardTitle"><?= $topic['name'] ?></a></div>
                                <div class="text-muted" style="font-size: 0.77rem; line-height: 1.2;">
                                    <?= $topic['desc'] ?>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center text-wrap text-break"><?= $topic['topicNumber'] ?></td>
                    <td class="text-center text-wrap text-break"><?= $topic['postNumber'] ?></td>
                    <td class="text-wrap text-break"><?= $topic['lastPost'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endforeach; ?>