<footer>
</footer>
</body>
<script language="javascript" src="/js/common.js"></script>
<?php if(isset($script_list) && is_array($script_list)): ?>
<?php foreach($script_list as $script): ?>
<script language="jabascript" src="/js/<?=$script?>.js"></script>
<?php endforeach; ?>
<?php endif; ?>
</html>