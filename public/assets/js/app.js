"use strict"

async function loadBudgetItems() {
    const response = await fetch('http://localhost/budget')
    return await response.json()
}

function renderTable(models) {

    if (models.length === 0)
    {
        return 'No table data.'
    }

    let isGray = true

    let rows = models.reduce((acc, model) => {

        isGray = !isGray

        const color = isGray ? 'class="gray"' : ''

        const fields = Object.values(model)

        const renderedFields = fields.reduce((acc, field) => acc + `<td>${field ?? '-'}</td>`, '')


        return acc + `<tr ${color}>${renderedFields}</tr>`

    }, '')

    const keys = Object.keys(models[0])

    const renderedKeys = keys.reduce((acc, key) => acc + `<th>${key}</th>`, '')

    const header = `<tr class="dark">${renderedKeys}</tr>`



    return `<table class="fin-table">`
        + `<thead>${header}</thead>`
        + `<tbody>${rows}</tbody>`
        + `</table>`
}

const budgetTableElement = document.querySelector('#budget-table')

const budgetItems = await loadBudgetItems()

let categories = Object.groupBy(budgetItems, ({ category }) => category);
categories = Object.entries(categories).map(([category, budgetItems]) => {
    const amount = budgetItems.reduce((acc, item) => acc + item.price, 0)

    return {category, amount}
})
budgetTableElement.innerHTML = renderTable(categories) + renderTable(budgetItems);

