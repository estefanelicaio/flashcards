import { Component, inject, Input, OnInit, signal } from '@angular/core';
import { Flashcard } from '../../interfaces/flashcard';
import { ActivatedRoute, RouterLink } from '@angular/router';

@Component({
  selector: 'app-answer',
  standalone: true,
  imports: [RouterLink],
  templateUrl: './answer.component.html',
  styleUrl: './answer.component.css'
})
export class AnswerComponent implements OnInit {

	private route = inject(ActivatedRoute);
	public showBack = signal(false);

	public flashcards: Array<Flashcard> = [];
	private index: number = 0;
	public answeredAll = signal(false);

	ngOnInit(): void {
		console.log('init')
		let id: string = this.route.snapshot.params['id'];

		for (let i = 1; i <= 3; i++) {
			this.flashcards.push({ front: `Frente ${i} parametro: ${id}`, back: `Verso ${i} parametro: ${id}` })
		}
	}

	public currentFlashcard(): Flashcard {
		return this.flashcards[this.index];
	}

	public goToNextFlashcard(): void {
		if(this.lastFlashcard()) {
			this.answeredAll.set(true);
			return;
		}

		this.showBack.set(false);
		this.index += 1;
	}

	public lastFlashcard(): Boolean {
		return this.flashcards.length - 1 == this.index;
	}

	public updateShowBack(): void {
		this.showBack.update(value => !value);
	}
}
