class Kanban {
	static rodapeDragenter() {
		const tarefaSendoArrastada = document.querySelector('.is-dragging')
		this.before(tarefaSendoArrastada)
	}
	static colunaDragenter() {
		this.classList.add('over')
		console.log(123)
	}
	static colunaDragleave() {
		this.classList.remove('over')
	}
	static colunaDragend() {
		colunas.forEach(coluna => coluna.classList.remove('over'))
	}
	static tarefaDragenter() {
		const tarefaSendoArrastada = document.querySelector('.is-dragging')

		if (this != tarefaSendoArrastada) { 
			if (tarefaSendoArrastada.parentNode.parentNode.getAttribute('data-column-id') != this.parentNode.parentNode.getAttribute('data-column-id')) {
				this.before(tarefaSendoArrastada)
				Kanban.reorderIndex()
			} else {
				if (Number(tarefaSendoArrastada.getAttribute('data-position')) < Number(this.getAttribute('data-position'))) {
					this.after(tarefaSendoArrastada)
				} else {
					this.before(tarefaSendoArrastada)
				}
				Kanban.reorderIndex()
			}
		}
	}
	static tarefaDragstart() { 
		this.classList.add('is-dragging')
		colunas.forEach(coluna => coluna.classList.add('highlight'))
	}
	static tarefaDragend(tarefa) { 
		colunas.forEach(coluna => coluna.classList.remove('highlight'))
		tarefa.classList.remove('is-dragging')
		Kanban.reorderIndex()
		Ajax.saveTasksPosition()
	}
	static reorderIndex() {
		colunas.forEach(coluna => {
			let count = 1
			const tarefas = Array.from(coluna.children)
			tarefas.forEach(tarefa => {
				tarefa.setAttribute('data-position' , count)
				count++
			})
		})
	}
}