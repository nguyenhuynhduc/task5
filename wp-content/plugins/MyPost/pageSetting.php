<div>
    <h2>Post</h2>
    <form method="post" action="admin.php?page=mymenupage" >
        <h2>Số Lượng </h2>
        <input id="number" name="number">
        <h2>Hiện Thị </h2>
        <select style="width: 200px">
            <option value="list">List</option>
            <option value="grid">grid</option>
            <option value="slide">slide</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if(isset( $_POST["footer"]))
    {
        global $wpdb;
        $table_name= $wpdb->prefix ."options";
        $wpdb->update(
            $table_name,
            array('option_value'=>$_POST["footer"]),
            array('option_name'=>'footer_option')
        );
    }
    ?>
</div>

