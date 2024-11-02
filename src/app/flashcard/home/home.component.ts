import { Category } from './../interfaces/category';
import { Component } from '@angular/core';
import { CategoryListComponent } from '../components/category-list/category-list.component';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CategoryListComponent],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

	public categorys!: Array<Category>;

}
