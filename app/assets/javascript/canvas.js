var canvasPanelExpanded = false;

function expandCanvasPanel() {

	if (!canvasPanelExpanded) {
		document.getElementById('canvas-panel').style.width = '100%';
		document.getElementById('canvas-panel').style.left = '0px';
		document.getElementById('canvas-panel').style.height = '50%';
		document.getElementById('canvas-panel').style.marginLeft = '0px';
		document.getElementById('canvas-panel').style.borderLeft = 'none';
		document.getElementById('canvas-panel').style.borderRight = 'none';
		document.getElementById('canvas-panel-up').className = 'glyphicon glyphicon-menu-down';
		canvasPanelExpanded = true;
	}
	else {
		document.getElementById('canvas-panel').style.width = '60px';
		document.getElementById('canvas-panel').style.left = '50%';
		document.getElementById('canvas-panel').style.height = '40px';
		document.getElementById('canvas-panel').style.marginLeft = '-30px';
		document.getElementById('canvas-panel').style.borderLeft = 'solid';
		document.getElementById('canvas-panel').style.borderRight = 'solid';
		document.getElementById('canvas-panel-up').className = 'glyphicon glyphicon-menu-up';
		canvasPanelExpanded = false;
	}
}