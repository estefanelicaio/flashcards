import { Component } from '@angular/core';
import { Category } from '../../interfaces/category';

@Component({
  selector: 'app-category-list',
  standalone: true,
  imports: [],
  templateUrl: './category-list.component.html',
  styleUrl: './category-list.component.css'
})
export class CategoryListComponent {

	public categories: Array<Category> = [{name: "Categoria 1"}, {name: "Categoria 2"},{name: "Categoria 3"},];

}
