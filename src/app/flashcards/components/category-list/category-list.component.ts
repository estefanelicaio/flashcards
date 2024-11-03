import { Component, EventEmitter, Output } from '@angular/core';
import { Category } from '../../interfaces/category';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-category-list',
  standalone: true,
  imports: [RouterLink],
  templateUrl: './category-list.component.html',
  styleUrl: './category-list.component.css'
})
export class CategoryListComponent {

	public categories: Array<Category> = [{id: 1, name: "Categoria 1"}, {id: 2, name: "Categoria 2"}, {id: 3, name: "Categoria 3"}];
}
